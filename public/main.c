#include <stdio.h>
#include <string.h>

#define MAX_NAME 50
#define MAX_BREED 50
#define MAX_ADDRESS 100

struct Dog {
    char name[MAX_NAME];
    char breed[MAX_BREED];
    char addressLine1[MAX_ADDRESS];
    char addressLine2[MAX_ADDRESS];
};

struct Dog createDog() {
    struct Dog newDog;
    
    printf("Enter dog's name: ");
    fgets(newDog.name, sizeof(newDog.name), stdin);
    newDog.name[strcspn(newDog.name, "\n")] = '\0'; // Removing newline character
    
    printf("Enter dog's breed: ");
    fgets(newDog.breed, sizeof(newDog.breed), stdin);
    newDog.breed[strcspn(newDog.breed, "\n")] = '\0'; // Removing newline character
    
    printf("Enter dog's address (line 1): ");
    fgets(newDog.addressLine1, sizeof(newDog.addressLine1), stdin);
    newDog.addressLine1[strcspn(newDog.addressLine1, "\n")] = '\0'; // Removing newline character
    
    printf("Enter dog's address (line 2): ");
    fgets(newDog.addressLine2, sizeof(newDog.addressLine2), stdin);
    newDog.addressLine2[strcspn(newDog.addressLine2, "\n")] = '\0'; // Removing newline character
    
    return newDog;
}

void printDog(struct Dog dog) {
    printf("Name: %s\n", dog.name);
    printf("Breed: %s\n", dog.breed);
    printf("Address: %s, %s\n", dog.addressLine1, dog.addressLine2);
}

int main() {
    struct Dog myDog = createDog();
    printDog(myDog);
    return 0;
}
