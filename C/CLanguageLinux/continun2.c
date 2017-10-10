#include <stdio.h>

int main(void)
{
	int i;
	do{
		i++;
		if(i==4){
			i++;
			continue;
		}
		printf("%d\n", i);
	}while(i<5);
	
	return 0;
}
