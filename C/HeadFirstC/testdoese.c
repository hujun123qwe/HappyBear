/*
*z这是什么格式？ 
*printf有返回值 
*/

#include <stdio.h>
int main()
{
	int doese[] = {1, 3, 2, 1000};

	//answer: 1000
	printf("%d\n", 3[doese]);
	//
	int some = 3[doese];
	printf("%d\n", some);
	
	if((3[doese])==doese[3]){
		printf("value same\n");
	}
	
	if(&(3[doese])==&(doese[3])){
		printf("pointer same\n");
	}
	return 0;
}
