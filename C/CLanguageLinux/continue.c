#include <stdio.h>

int main(void)
{
	int i;
	int r =0;
	for(i=0;i<10;i++){
		if(i%2==0){
			++i;
		}
		r+=i;
		printf("%d\n",r);
	}
	printf("%d\n",r);
	return 0;
}
