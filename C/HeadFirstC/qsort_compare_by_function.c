#include <stdio.h>
#include <string.h>
#include <stdlib.h>

/*
the c language inlcude compare function: qsort
here is decliar:
qsort( void *array,
	   size_t length,
	   size_t item_size,
	   int (*compar)(const void*, const void*));
*/


//因为const void*传递的是任意类型，所有要转换一下 
int compare_scores(const void* score_a, const void* score_b)
{
	int a = *(int *)score_a;
	int b = *(int *)score_b;
	return a-b;
}

int compear_scores_desc(const void *score_a, const void *score_b)
{
	int a = *(int *)score_a;
	int b = *(int *)score_b;
	return b-a;
}

typedef struct{
	int width;
	int height;
}rectangle;

int compare_areas(const void *a, const void *b)
{
	rectangle *ra = (rectangle *)a;
	rectangle *rb = (rectangle *)b;
	int area_a = (ra->width * ra->height);
	int area_b = (rb->width * rb->height);
	return area_a - area_b;
}

//二维数组要双指针 
int compare_names(const void *a, const void *b)
{
	char **sa = (char **)a;
	char **sb = (char **)b;
	return strcmp(*sa, *sb);
}



int main()
{
	int scores[] = {543, 323, 32, 554, 11, 2, 12};
	int i;
	qsort(scores, 7, sizeof(int), compare_scores);
	puts("These are the scores in order: ");
	for(i=0; i<7; i++){
		printf("Score = %i\n", scores[i]);
	}
	char *names[] = {"Karen", "Mark", "Brett", "Molly"};
	qsort(names, 4, sizeof(char *), compare_names);
	puts("These are ths names in order: ");
	for(i=0; i<4; i++){
		printf("%s\n", names[i]);
	}
	return 0;
}
