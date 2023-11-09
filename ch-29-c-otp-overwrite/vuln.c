#include <stdio.h>
#include <string.h>

char* GetOTP(){
    return "1337";
}

int LoadDashboard(){}

int main(void)
{
    char *OTP = GetOTP();
    char tryOTP[4];
    int root = 0;

    for ( int tries = 0; tries < 3; tries++ ) {
        printf("Enter OTP (Four digits): ");
        gets(tryOTP);
        // Debug
        // puts(OTP);
        // puts(tryOTP);
        // printf("\n%d\n", root);
        if ( root || strcmp(tryOTP, OTP) == 0 ) {

            printf("> Success, loading dashboard\n");
            LoadDashboard();
            return 1;
        } else {
            printf ("> Incorrect OTP\n");
        }
        
        if ( tries >= 3 ) {
            return 0;
        }
    }
}