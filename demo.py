import streamlit as st

class Employee:
    def __init__(self, name, company, hourly_wage):
        self.name = name
        self.company = company
        self.hourly_wage = hourly_wage
        self.total_hours = 0
        self.total_earnings = 0

    def log_hours(self, hours):
        self.total_hours += hours
        self.total_earnings += hours * self.hourly_wage

    def get_total_earnings(self):
        return self.total_earnings

    def get_total_hours(self):
        return self.total_hours

def main():
    st.title("Employee Time Tracking")

    # Get employee information
    name = st.text_input("Enter your name")
    company = st.text_input("Enter your company name")
    hourly_wage = st.number_input("Enter your hourly wage", min_value=0.0, step=0.01)

    # Create the employee
    employee = Employee(name, company, hourly_wage)

    # Log hours
    st.header("Log Your Hours")
    hours = st.number_input("Enter hours worked", min_value=0.0, step=0.1)
    if st.button("Log Hours"):
        employee.log_hours(hours)
        st.success(f"Logged {hours} hours for {employee.name} at {employee.company}.")

    # Display employee details
    st.header("Your Details")
    st.write(f"Name: {employee.name}")
    st.write(f"Company: {employee.company}")
    st.write(f"Hourly Wage: ${employee.hourly_wage:.2f}")
    st.write(f"Total Hours: {employee.get_total_hours()}")
    st.write(f"Total Earnings: ${employee.get_total_earnings():.2f}")

if __name__ == "__main__":
    main()