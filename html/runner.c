#include <unistd.h>
#include <stdio.h>

int main(int argc, char **argv)
{
	const char *bash = "bash";
	argv[0] = (char*)bash;
	printf("%d\n", getuid());
	printf("%d\n", geteuid());
//	return 0;
	return execv("/bin/bash", argv);
}
