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
	
	//Ĭ��ָ���һ�� 
	quantity order = {2};
	printf("%i", order.count);
	return 0;
}

