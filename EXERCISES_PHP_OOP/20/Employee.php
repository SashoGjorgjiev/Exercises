<?php

class Employee
{
    public string $name;
    public int $employeeId;
    public float $salary;

    public function __construct(string $name, int $employeeId, float $salary)
    {
        $this->name = $name;
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
}

class Department
{
    public string $name;
    public array $employees;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->employees = [];
    }

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Employee $employee): void
    {
        $this->employees = array_filter($this->employees, function ($e) use ($employee) {
            return $e->employeeId !== $employee->employeeId;
        });
        $this->employees = array_values($this->employees);
    }

    public function calculateTotalSalary(): float
    {
        $total = 0;
        foreach ($this->employees as $employee) {
            $total += $employee->salary;
        }
        return $total;
    }
}
// Creating Employee objects
$employee1 = new Employee('Alice', 101, 5000.50);
$employee2 = new Employee('Bob', 102, 4500.00);
$employee3 = new Employee('Charlie', 103, 4700.75);

// Creating a Department and adding employees
$department = new Department('HR');
$department->addEmployee($employee1);
$department->addEmployee($employee2);
$department->addEmployee($employee3);

// Removing an employee
$department->removeEmployee($employee2);

// Calculating the total salary
$totalSalary = $department->calculateTotalSalary();
echo "Total Salary for {$department->name} Department: $totalSalary € <br/>";


$employee4 = new Employee('David', 104, 5500.00);
$employee5 = new Employee('Eve', 105, 6000.00);
$employee6 = new Employee('Frank', 106, 6500.00);

$department = new Department('Logistics');
$department->addEmployee($employee4);
$department->addEmployee($employee5);
$department->addEmployee($employee6);

$totalSalary = $department->calculateTotalSalary();
echo "Total Salary for {$department->name} Department: $totalSalary € <br/>";
