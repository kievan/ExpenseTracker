<?php

function doUpload($fileToMove){
	return move_uploaded_file($_FILES["file"]["tmp_name"],$fileToMove);
}

function displayCSVData( $filePath ){
	if (($handle = fopen($filePath, "r")) !== FALSE) {
		echo "<html><table>";
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			echo "<tr>";
			for ($c=0; $c<$num; $c++) {
				if( $data[$c] == "TOTAL" )
				   echo "<td><b>".$data[$c] . "</b>";
				else
					echo "<td>".$data[$c];
			}
			echo "</tr>";
		}
		echo "</table></html>";
		fclose($handle);
	}
}

function main(){
	$filePath = "upload/".$_FILES["file"]["name"];
	if( $filePath !== NULL ){
		if( doUpload($filePath) !== FALSE )
			displayCSVData($filePath);
		else
			echo "Error Displaying Contents of the CSV file.";
	}
	else
		echo "Error reading CSV file.";
}
	
	main();

?>