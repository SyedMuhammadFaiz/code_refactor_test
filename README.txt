Code refactored (just some steps)
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php


X. Your thoughts about the code.

1) What makes it amazing code. Or what makes it ok code. Or what makes it terrible code?

    - I'll classify it as terrible code. Less formatting, Unstructured, Not using modern day standards 
    - framework functionalities almost not using at all which makes it harder to manage and update in fact I saw raw curl request instead HttpClient
    - Not using PSR as well 

2) How would you have done it?

    - Try to break it in many classes to implement Single Responsibility Principle 
    - Use Framework (I assume laravel) functionalities to make it easier to understand, maintain and upgrade with efficiency 

3) Thoughts on formatting, structure, logic.. The more details that you can provide about the code (what's terrible about it or/and what is good about it) the easier for us to assess your coding style, mentality etc

    It will be time taking task to refactor all the code base. I assume that I am working on this project to refactor it I'll implement:
        i)      Mailables
        ii)     Services
        iii)    Observers
        iv)     Middleware
        v)      Authorization
        vi)     Validation
        vii)    Exception Handling
        viii)   Interfaces
        ix)     Jobs and Queues
        x)      SOLID Principle
        xi)     Database Optimization (if required)
        xii)    Security (assume it'll be required)
        xiii)   API resources to transform responses with unified format to make it easy for Cross platform integration
        xiv)    Test Cases
        xv)     Roles and Permission (it is essential to reduce manually check conditions in each and every action)
        xvi)    In many occasions logics are too much complex which may become simpler to implent KISS (Keep it simple, stupid) principle

And perhaps more as per requirement.