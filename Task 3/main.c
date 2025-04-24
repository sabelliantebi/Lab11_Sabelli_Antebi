#include "isOdd.h"
#include <stdio.h>

int main() {
    int num;
    printf("Enter an integer: ");
    scanf("%d", &num);

    if (isOdd(num)) {
        printf("%d is odd.\n", num);
    } else {
        printf("%d is not odd, it is even.\n", num);
    }

    return 0;
}