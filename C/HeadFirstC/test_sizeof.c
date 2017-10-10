#include <stdio.h>

void fortune_cookie(char msg[])
{
	printf("Message reads: %s\n", msg);
	printf("msg occupies %i bytes\n", sizeof(msg));
}

int main()
{
	char msg[] = "Who`s your daddy?!";
	fortune_cookie(msg);
	return 0;
}
