#include <stdio.h>
#include <stdlib.h>

int main()
{
	char card_name[3];
	int count = 0;
	do{
		puts("Input Card Name: ");
		scanf("%s", card_name);
		int val = 0;
		switch(card_name[0]){
			case 'K':
			case 'k':
			case 'Q':
			case 'q':
			case 'J':
			case 'j':
				val = 10;
				break;
			case 'A':
			case 'a':
				val = 11;
				break;
			case 'X':
			case 'x':
				continue;
			default:
				val = atoi(card_name);
				if(val<1 || val>10){
					puts("I can not understand this value!");
					continue;
				}
		}
		if(val>2 && val<7){
			count++;
		}else if(val == 10){
			count--;
		}
		printf("Now count is : %d\n", count);
	}while(card_name[0]!='X' && card_name[0]!='x');
	return 0;
}
