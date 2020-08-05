function createRequest() {
  var request;
  try {
      request = new XMLHttpRequest();
  }
  catch (tryMs) {
      try {
          request = new ActiveXObject('Msxml2.XMLHTTP');
      }
      catch (otherMs) {
          try {
              request = new ActiveXObject('Microsoft.XMLHTTP');
          }
          catch (failed) {
              request = null;
          }
      }
    }
  return request;
}
