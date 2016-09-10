#include <wiringPi.h>
#include <softPwm.h>

int main (void)
{
    if (wiringPiSetup () == -1)
        exit (1);
    softPwmCreate (1, 0, 100);
    softPwmWrite (1, 15);
    delay(1000);
    return 0;
}
