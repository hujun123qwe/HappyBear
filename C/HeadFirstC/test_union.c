#include <stdio.h>

typedef union{
	short count;
	float weight;
	float volume;
}quantity;

int main()
{
	quantity q = {.weight=1.5};
	printf("%.2f\n",q.weight);
	
	//默认指向第一个 
	quantity order = {2};
	printf("%i", order.count);
	return 0;
}

