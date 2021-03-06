#include <stdio.h>
#include <string.h>

int NUM_ADS = 7;
char *ADS[]={
	"William: SBM GSOH likes sports, TV, dininng",
	"Matt: SWM NS likes art, movies, theater",
	"Luis: SLM ND likes books, theater, art",
	"Mike: DWM DS likes trucks, sports and bieber",
	"Peter: SAM likes chess, working out and art",
	"Josh: SJM likes sports, movies and theater",
	"Jed: DBM likes theater, books and dining"
};

int sports_no_bieber(char *s)
{
	return strstr(s, "sports") && !strstr(s, "bieber");
}

int sports_or_workout(char *s)
{
	return strstr(s, "sports") || strstr(s, "woking out");
}

int ns_theater(char *s)
{
	return strstr(s, "theater") && strstr(s, "NS");
}

int arts_theater_or_dining(char *s)
{
	return strstr(s, "arts") || strstr(s, "theater") || strstr(s, "dining");
}
//将函数作为参数
//返回类型 （* 指针变量 ）（参数类型）
//char** ( *names_fn)(char*, int) 
void find( int (*match)(char *))
{
	int i;
	puts("Search results:");
	puts("------------------------------------!");
	for(i=0; i<NUM_ADS; i++){
		if(match(ADS[i])){
			printf("%s\n", ADS[i]);
		}
	}
	puts("------------------------------------!");
}

int main()
{
	find(sports_no_bieber);
	find(sports_or_workout);
	find(ns_theater);
	find(arts_theater_or_dining);
	
	return 0;
}


