#include <stdio.h> 
#include <string.h>

island* create(char *name)
{
	island *i = malloc(sizeof(island));
	//����ֱ����name�Ḳ��ǰ���nameֵ
	//ע����ָ��
	//Ҫcopyһ�ݵ����� 
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
