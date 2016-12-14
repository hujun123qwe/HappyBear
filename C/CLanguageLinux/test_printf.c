/******************************
*time:	2015-10-26 11:01:51 
*程序会输出4321
*printf返回值是输出的字符个数。
******************************/
#include <stdio.h>
int main()
{
	int i=43;
	int a = 1;
	printf("%d\n", printf("%d", printf("%d",i)));
	printf("%c\n", a);
	return 0;
}
