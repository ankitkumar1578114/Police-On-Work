<!DOCTYPE html>
<html>
<head>
	<title>change pdf</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function generatepdf(){
var doc=new jsPDF();
doc.text(20,20,'This is client-side Javascript to geenerate a pdf');
doc.save('document.pdf');
}	
</script>
</head>
<body>
<button onclick="generatepdf()">Click Me</button>
</body>
</html>