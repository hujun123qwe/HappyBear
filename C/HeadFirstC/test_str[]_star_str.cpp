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
	
	//��Ȼ���ص���ָ�룬���������ȡ���� 
	printf("%s\n", stack_check(str));
	printf("%s\n", stack_check_star(str));
	return 0;
}
