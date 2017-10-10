
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
	char line[80];
	
	FILE *in = fopen("spook.csv", "r");
	FILE *file1 = fopen("ufos.csv", "w");
	FIEL *file2 = fopen("disapperances.csv", "w");
	FILE *file3 = fopen("other.csv", "w");
	
	while(fscanf(in, "%79[^\n]\n", line) == 1){
		if(strstr(line, "spook")){
			fprintf(file1, "%s\n", line);
		}else if(strstr(line, "ufo")){
			fprintf(file2, "%s\n", line);
		}else{
			fprintf(file3, "%s\n", line);
		}
	}
	
	fclose(file1);
	fclose(file2);
	fclose(file3);
	
	return 0;
} 
