<?phpif(!empty($_POST)){foreach($_POST as $key=>$val){$arr[]= $key.": ".$val."      " ;}$str=implode('',$arr);$to="info@infinitetrails.in";$subject="Query On Website";$msg=$str;$headers="Website Query";$header="Bcc:  /r/n";if(mail($to,$subject,$msg,$header)){echo "<script type='text/javascript'>alert('Thanks. Mail Sent'); window.location='thank_you.html';</script>";}else{echo "<script type='text/javascript'>alert('oops! Error occured.'); window.location='thank_you.html';</script>";}}?>