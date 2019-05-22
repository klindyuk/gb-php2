﻿<?php
// 5. Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4
// Что он выведет на каждом шаге? Почему?

// Немного изменим п.5:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1, как в предыдущем случае
$b1->foo(); // 1, т.к. создается статическая переменная х, принадлежащая классу В
$a1->foo(); // 2. Увеличиваем значение х из класса А
$b1->foo(); // 2. А теперь для класса В
// 6. Объясните результаты в этом случае.

// 7. *Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 
// Что он выведет на каждом шаге? Почему?

// то же, что в предыдущем примере. Здесь конструктор вызывается без скобок, но, поскольку мы не передаем ему параметров, это не имеет значения. 