<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--Edit page title-->
<title>Artha June 2018</title>
<link href="book.css" rel="stylesheet">
<!-- Flipbook StyleSheet -->
<link href="dflip.css" rel="stylesheet" type="text/css">
<!-- Icons Stylesheet -->
<link href="themify-icons.css" rel="stylesheet" type="text/css">
<style>
#df_book_full {
	height: 100vh;
}
@media all and ( max-width: 1000px ) {
#df_book_full {
	height: calc(100vh - 60px);
}
}
body {
	height: 100%;
}
</style>
</head>
<body>
<div class="_df_book" backgroundcolor="teal" id="df_book_full"></div>
<!-- jQuery 1.9.1 or above --> 
<script src="jquery.min.js" type="text/javascript"></script> 
<!-- Flipbook main Js file --> 
<script src="dflip.js" type="text/javascript"></script> 
<script>
var option_df_book_full = {
	//source: sample.pdf
    source: "sample.pdf?" + Math.random(),
	hard: "cover",
	webgl: false
};
</script>
</body>
</html>
