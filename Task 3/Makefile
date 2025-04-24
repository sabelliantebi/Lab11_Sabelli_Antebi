#compiler
CC = gcc
CFLAGS = -Wall -c

TARGET = isOddProgram

OBJS = main.o isOdd.o

all: $(TARGET)

$(TARGET): $(OBJS)
	$(CC) $(OBJS) -o $(TARGET)

main.o: main.c isOdd.h
	$(CC) $(CFLAGS) main.c

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) isOdd.c

clean:
	rm -f $(OBJS) $(TARGET)