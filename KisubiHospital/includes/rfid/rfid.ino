/*

   All the resources for this project: https://randomnerdtutorials.com/
   Modified by Rui Santos

   Created by FILIPEFLOP

*/
#include "SoftwareSerial.h"
#include <SPI.h>
#include <MFRC522.h>

#define SS_PIN 10
#define RST_PIN 9
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Create MFRC522 instance.

String ssid = "engdave-home";
String password = "engdave@2020";
SoftwareSerial esp(5, 6);// RX, TX

String data;
String server = "192.168.0.175"; // www.example.com
String uri = "/delivered-orders/";

void setup()
{
  esp.begin(115200);
  Serial.begin(115200);
  //start wifi connection to the module
  reset();
  esp.print("AT+CWMODE=3");
  Serial.println(esp.readString());
  connectWifi();

  //if wifi is connected, then proceed to the RFID reader
  SPI.begin();      // Initiate  SPI bus
  mfrc522.PCD_Init();   // Initiate MFRC522
  Serial.println("Approximate your card to the reader...");
  Serial.println();

}

//reset the esp8266 module

void reset() {
  esp.println("AT+RST");
  delay(1000);
  if (esp.find("OK") ) Serial.println("Module Reset");
}

//connect to your wifi network
void connectWifi() {
  String cmd = "AT+CWJAP=\"" + ssid + "\",\"" + password + "\"";
  esp.println(cmd);
  delay(3000);
  int count = 0;
  while (count <= 3) {
    if (esp.find("OK")) {
      Serial.println("Connected!");
      break;
    }
    else if (count != 3) {
      Serial.println("Cannot connect to wifi");
      //connectWifi();
    } else {
      Serial.println("restarting the loop");
      connectWifi();
    }
    count += 1;
    delay(1000);
  }
}

void httppost (String data) {
  esp.println("AT+CIPSTART=\"TCP\",\"" + server + "\",8000");//start a TCP connection.
  delay(2000);
  if ( esp.find("OK")) {
    Serial.println("TCP connection ready");
  } delay(500);
  String postRequest =
    "POST " + uri + " HTTP/1.0\r\n" +
    "Host: " + server + "\r\n" +
    "Accept: *" + "/" + "*\r\n" +
    "Content-Length: " + data.length() + "\r\n" +
    "Content-Type: application/x-www-form-urlencoded\r\n" +
    "\r\n" + data;
  String sendCmd = "AT+CIPSEND=";//determine the number of caracters to be sent.
  esp.print(sendCmd);
  esp.println(postRequest.length());
  delay(500);
  if (esp.find(">")) {
    Serial.println("Sending..");
    esp.print(postRequest);
    if ( esp.find("SEND OK")) {
      Serial.println("Packet sent");;
      while (esp.available()) {
        Serial.println(esp.readString());
        String tmpResp = esp.readString();
        Serial.println(tmpResp);
      }
      // close the connection
      esp.println("AT+CIPCLOSE");
    }
  } else {
    //If error occurs during read of data from website
    Serial.println("Failed getting web page");
  }
}

void loop()
{
  // Look for new cards
  if ( ! mfrc522.PICC_IsNewCardPresent())
  {
    return;
  }
  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial())
  {
    return;
  }
  //Show UID on serial monitor
  Serial.print("UID tag :");
  String content = "";
  byte letter;
  for (byte i = 0; i < mfrc522.uid.size; i++)
  {
    Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
    Serial.print(mfrc522.uid.uidByte[i], HEX);
    content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
    content.concat(String(mfrc522.uid.uidByte[i], HEX));
  }
  Serial.println();
  Serial.print("Message : ");
  content.toUpperCase();
  if (content.substring(1) == "16 BB 63 12") //change here the UID of the card/cards that you want to give access
  {
    Serial.println("Authorized access");
    Serial.println();
    httppost("id=54&user=engdave&UUID="+content.substring(1));
    Serial.println("Approximate your card to the reader...");
    Serial.println();
    delay(1000);
  }
  else   {
    Serial.println(" Access denied, however request performed");
    httppost("id=54&user=engdave&UUID="+content.substring(1));
    Serial.println("Approximate your card to the reader...");
    Serial.println();
    delay(1000);
  }
}
