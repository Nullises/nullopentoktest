<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OPEN TOK TEST</title>
  </head>
  <body>
    <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
    <script charset="utf-8">
      var apiKey = '45625752';
      var sessionId = '2_MX40NTYyNTc1Mn5-MTQ2OTIxOTk5NTQxNn5HNHhHdDdZNUs0ZFI0N2pEcDYwZGQxZG1-fg';
      var token = 'T1==cGFydG5lcl9pZD00NTYyNTc1MiZzaWc9NWE5ODYyZDBmYWFkNzc4N2M2MWRmNzIxOTBjY2I0YzMzNTY0MDhlNzpzZXNzaW9uX2lkPTJfTVg0ME5UWXlOVGMxTW41LU1UUTJPVEl4T1RrNU5UUXhObjVITkhoSGREZFpOVXMwWkZJME4ycEVjRFl3WkdReFpHMS1mZyZjcmVhdGVfdGltZT0xNDY5MjE5OTg2Jm5vbmNlPTAuOTI4NDU1NzEzOTAzNTMxNCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNDY5MjQxNTg0';
      var session = OT.initSession(apiKey, sessionId)
        .on('streamCreated', function(event) {
          session.subscribe(event.stream);
        })
        .connect(token, function(error) {
          var publisher = OT.initPublisher();
          session.publish(publisher);
        });
    </script>
  </body>
</html>
