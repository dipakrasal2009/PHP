 <?php 
  class Teacher:
        def __init__(self, code, name, qualification):
            self.code = code
            self.name = name
            self.qualification = qualification

        def display_info(self):
            print("Teacher Code:", self.code)
            print("Name:", self.name)
            print("Qualification:", self.qualification)


    class TeachAccount(Teacher):
        def __init__(self, code, name, qualification, account_no, joining_date):
            super().__init__(code, name, qualification)
            self.account_no = account_no
            self.joining_date = joining_date

        def display_info(self):
            super().display_info()
            print("Account Number:", self.account_no)
            print("Joining Date:", self.joining_date)


    class TeachSal(TeachAccount):
        def __init__(self, code, name, qualification, account_no, joining_date, basic_pay, earnings, deduction):
            super().__init__(code, name, qualification, account_no, joining_date)
            self.basic_pay = basic_pay
            self.earnings = earnings
            self.deduction = deduction

        def display_info(self):
            super().display_info()
            print("Basic Pay:", self.basic_pay)
            print("Earnings:", self.earnings)
            print("Deduction:", self.deduction)

        def calculate_salary(self):
            return self.basic_pay + self.earnings - self.deduction


    def build_master_table(teachers):
        code = input("Enter Teacher Code: ")
        name = input("Enter Name: ")
        qualification = input("Enter Qualification: ")
        account_no = input("Enter Account Number: ")
        joining_date = input("Enter Joining Date: ")
        basic_pay = float(input("Enter Basic Pay: "))
        earnings = float(input("Enter Earnings: "))
        deduction = float(input("Enter Deduction: "))
        teacher = TeachSal(code, name, qualification, account_no, joining_date, basic_pay, earnings, deduction)
        teachers.append(teacher)
        print("Teacher information added successfully.")

    def sort_entries(teachers):
        teachers.sort(key=lambda x: x.name)

    def search_entry(teachers, code):
        for teacher in teachers:
            if teacher.code == code:
                teacher.display_info()
                return
        print("Teacher not found.")

    def display_all_salaries(teachers):
        print("Salary Details:")
        for teacher in teachers:
            print("Teacher:", teacher.name)
            print("Salary:", teacher.calculate_salary())
            print()


    def main():
        teachers = []
        while True:
            print("\nMenu:")
            print("a) Build Master Table")
            print("b) Sort all entries")
            print("c) Search an entry")
            print("d) Display salary of all teachers")
            print("e) Exit")

            choice = input("Enter your choice: ").lower()

            if choice == 'a':
                build_master_table(teachers)
            elif choice == 'b':
                sort_entries(teachers)
                print("Entries sorted successfully.")
            elif choice == 'c':
                code = input("Enter teacher code to search: ")
                search_entry(teachers, code)
            elif choice == 'd':
                display_all_salaries(teachers)
            elif choice == 'e':
                print("Exiting program.")
                break
            else:
                print("Invalid choice. Please try again.")


    if __name__ == "__main__":
        main()
?>