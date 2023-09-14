# Модуль GercPay для Magento 2

Creator: [Mustpay](https://mustpay.tech)<br>
Tags: Magento, GercPay, payment, payment gateway, credit card, Visa, MasterCard, Apple Pay, Google Pay<br>
Requires at least: Magento 2.3<br>
License: GNU GPL v3.0<br>
License URI: [License](https://opensource.org/licenses/GPL-3.0)

## Встановлення

1. Розпакувати вміст архіву в корінь вашого сайту із збереженням структури каталогів.

2. У кореневому каталозі сайту виконати у терміналі такі команди:</br>

   > *php bin/magento setup:upgrade*
   >
   > *php bin/magento setup:di:compile*
   >
   > *php bin/magento cache:flush*

3. Перейти до розділу *«Магазин -> Конфігурація» («Stores -> Configuration»)*.

4. Відкрити вкладку "Продажі -> Методи оплати" ("Sales -> Payment Methods") *.

1. Ввести дані, отримані від платіжної системи, та зберегти зміни:
   - *Ідентифікатор торговця (Merchant ID)*;
   - *Секретний ключ (Secret key)*.

Модуль готовий до роботи.

*Модуль протестований для роботи з Magento Community 2.3.6, Magento Community 2.4.1 та PHP 7.4.*
