#include <stdio.h> 
#include <string.h>

island* create(char *name)
{
	island *i = malloc(sizeof(island));
	//这里直接用name会覆盖前面的name值
	//注意是指针
	//要copy一份到堆上 
	//i->name = name;
	i->name = strdup(name);
	i->opens = "09:00";
	i->closes = "17:00";
	i->next = NULL;
	return i;
} 


int main()
{
	return 0;
}
