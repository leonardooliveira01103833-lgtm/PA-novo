use employees
select * from dept_manager;

select e.emp_no, e.first_name , e.last_name , d.dept_no , e.hire_date
from employees e 
join dept_manager d on e.emp_no = d.emp_no ;