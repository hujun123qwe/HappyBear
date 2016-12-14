#include <stdio.h>
#include <math.h> 

int main(){
	double rate = 1.02704;
	double money = 500.00;
	double sum;
	int ii;
	for(ii=1; ii<=20; ii++){
		sum+=pow(rate, ii);
	}
	printf("%f\n",sum);
	printf("%f\n",money*12*20);
	printf("%f",sum*money*12);
	return 0;
}
