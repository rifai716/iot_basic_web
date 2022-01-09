// Create a client instance
client = new Paho.MQTT.Client("broker.hivemq.com", 8000, "clientId-matkuliot-32894327894732894329042-harus-unix");

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

// connect the client
client.connect({onSuccess:onConnect});


// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  console.log("onConnect");
  client.subscribe("sensor/D001");
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
  }
}

// called when a message arrives
function onMessageArrived(message) {
  console.log("onMessageArrived:"+message.payloadString);
  let arr = message.payloadString.split("#")
  let hum = arr[0]
  let temp = arr[1]
  let ldr = arr[2]

  $("#hum_sensor").html(hum)
  $("#temp_sensor").html(temp)
  $("#ldr_sensor").html(ldr)
}