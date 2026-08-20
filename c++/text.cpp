#include <iostream>
#include <string>
#include <vector>
using namespace std;

int main() {
  string name = "Rohit";
  int age = 40;
  vector<int> marks = {85, 90, 78, 92};
  int total = 0;
  for (int mark : marks) {
    total += mark;
  }
  double average = (double)total / marks.size();
  if (average >= 80) {
    cout << "Student: " << name << endl;
    cout << "Age: " << age << endl;
    cout << "Average: " << average << endl;
    cout << "Result: PASS" << endl;
  } else {
    cout << "Student: " << name << endl;
    cout << "Age: " << age << endl;
    cout << "Average: " << average << endl;
    cout << "Result: FAIL" << endl;
  }
  return 0;
}