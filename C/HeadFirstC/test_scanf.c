#include <stdio.h>
int main()
{
	char name[4];
	printf("Enter your name only 3 characters: ");
	
	printf("%d\n",scanf("%3s",name));
	//��scanf���ص�ʼ����1������һ���ַ����������ַ����ĳ���
	//ֻҪ����ߵĲ�������������
	
	//��ô�жϵ��������˶��ٸ��ַ��� 
	if(name){
		printf("ok, %s", name);
	}else{
		
		printf("too long, %s", name);
	}
	
	printf("\n***************************************\n");
	
	char font_name[10];
	char rear_name[10];
	printf("Full name please: ");
	//[^\n]����˼�ǰ��������µ��ַ������� 
	if(scanf("%9s %9[^\n]", font_name, rear_name)==2){
		printf("Post to: %s %s", font_name, rear_name);
	}else{
		printf("some");
	}
	
	printf("\n*********************fgets()******************\n");
	
	//���û�����룬�ѵ�������linux�£� 
	//����һ�����볬��������ʱ�������õ������������� 
	char food[4];
	printf("Enter favorite food: ");
	fgets(food, sizeof(food), stdin);
	printf("just 3 characters::  %s", food);
	
	return 0;
}
