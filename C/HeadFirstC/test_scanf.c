#include <stdio.h>
int main()
{
	char name[4];
	printf("Enter your name only 3 characters: ");
	
	printf("%d\n",scanf("%3s",name));
	//这scanf返回的始终是1，就是一个字符串，不是字符串的长度
	//只要看后边的参数个数就行了
	
	//怎么判断到底输入了多少个字符？ 
	if(name){
		printf("ok, %s", name);
	}else{
		
		printf("too long, %s", name);
	}
	
	printf("\n***************************************\n");
	
	char font_name[10];
	char rear_name[10];
	printf("Full name please: ");
	//[^\n]，意思是把这行余下的字符都给我 
	if(scanf("%9s %9[^\n]", font_name, rear_name)==2){
		printf("Post to: %s %s", font_name, rear_name);
	}else{
		printf("some");
	}
	
	printf("\n*********************fgets()******************\n");
	
	//这个没法输入，难道必须在linux下？ 
	//当上一个输入超过缓冲区时，这个会得到缓冲区的内容 
	char food[4];
	printf("Enter favorite food: ");
	fgets(food, sizeof(food), stdin);
	printf("just 3 characters::  %s", food);
	
	return 0;
}
