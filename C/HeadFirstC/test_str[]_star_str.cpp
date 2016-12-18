#include <stdio.h> 

char *stack_check( char str[] )
{
	return str;
}

char *stack_check_star( char *str )
{
	return str;
}



int main()
{
	char str[]="hujun";
	
	//虽然返回的是指针，但输出不用取内容 
	printf("%s\n", stack_check(str));
	printf("%s\n", stack_check_star(str));
	return 0;
}
