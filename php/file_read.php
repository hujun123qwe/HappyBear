<?php 

//���Ȳ��á�fopen���������ļ����õ�����ֵ�ľ�����Դ���͡�

$file_handle = fopen("f.txt","r");

if ($file_handle){
    
//���Ų���whileѭ�����������Խṹ����е�ѭ���ṹ����ϸ���ܣ�һ���еض�ȡ�ļ���Ȼ�����ÿ�е�����
    while (!feof($file_handle)) { //�ж��Ƿ����һ��
        
	   $line = fgets($file_handle); //��ȡһ���ı�
	        
		echo $line; //���һ���ı�
		        
		echo "<br />"; //����
	    
	}
}

fclose($file_handle);//�ر��ļ�

?>