<x-mail::message>
# Welcome, {{ $employee->name }}!

We’re thrilled to have you join the **{{ $employee->department->name }}** department.

Here are your details:
- **Email:** {{ $employee->email }}
- **Salary:** ₹{{ number_format($employee->salary, 2) }}

We look forward to your contributions and hope you have a great start with us!


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

