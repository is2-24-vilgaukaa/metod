/*ОПИСАНИЕ ИПОТЕКИ*/
/*ипотека с господдержкой*/
function state_support() {
document.querySelector('.title').innerHTML = '<br>' + 'Ипотека с господдержкой';
document.querySelector('.descriptionP').innerHTML = 'Ипотека с господдержкой — это кредит под сниженный процент' + 
'для отдельных категорий заемщиков, где разницу между рыночной и льготной ставкой компенсирует государство.' + 
' Для оформления ипотечного кредита с господдержкой клиент должен соответствовать определенным требованиям и' + 
'подобрать жилье, которое подходит под условия госпрограммы. Обязательное условие — страхование риска утраты и порчи' + 
'недвижимого имущества. Это требуется по закону. Любая приобретенная в ипотеку недвижимость становится залогом и' + 
'нуждается в страховании до момента полного погашения займа.' + '<br> <br>';
}

/*семейная ипотека*/
function family() {
document.querySelector('.title').innerHTML = '<br>' + 'Семейная ипотека';
document.querySelector('.descriptionP').innerHTML = 'Участники этой программы могут взять ипотеку или' +
'рефинансировать уже имеющийся кредит по льготной ставке — 6%. Разницу между обычной и льготной ставкой банку' + 
'компенсирует государство. Подавать заявку на «Семейную ипотеку» можно, если дети и родители имеют гражданство РФ.' +
'Супруг заемщика обязательно выступает поручителем, если это официально зарегистрированные отношения и нет' +
'брачного договора.' + '<br> <br>';
}

/*ипотека для IT-специалистов*/
function it() {
document.querySelector('.title').innerHTML = '<br>' + 'Ипотека для IT-специалистов';
document.querySelector('.descriptionP').innerHTML = 'Данная льготная программа была принята после постановления' +
'Правительства России в марте 2022 года о поддержке сотрудников компаний, осуществляющих деятельность в сфере' + 
'информационных технологий. Господдержка позволяет работникам получить ипотечный кредит с пониженной процентной' + 
'ставкой до 5% годовых на жилой дом или квартиру от застройщика в готовой или строящейся новостройке.' +
' Организация работодателя должна быть аккредитована Минцифры РФ и соответствовать условиям, необходимым для' +
'получения налоговых льгот. Продавцом может быть только юридическое лицо, за исключением управляющей компании' + 
'инвестиционного фонда.' + '<br> <br>';
}

/*КАЛЬКУЛЯТОР ИПОТЕКИ*/
let form = document.querySelector('#form');
let sum = document.querySelector('#sum');
let period = document.querySelector('#period');
let rate = document.querySelector('#rate');
let calc = document.querySelector('#calc');

/*вывод результата*/
form.addEventListener('submit', function(e) {
let result,
elem = document.createElement('div');
e.preventDefault();
document.querySelector('.mortgage').innerHTML = '<b>Ежемесячный платеж, в рублях: ' 
+ calculator.getPayment(sum.value, period.value, rate.value) + '<br> Варианты оформления:</b>';
}, false);

let calculator = (function() {
let module = {};

function getBaseLog(x, y) {
return Math.log(y) / Math.log(x);
};

module.getPayment = function(sum, period, rate) {
let i, koef, result;

/*ставка в месяц*/
i = (rate / 12) / 100; 

/*коэффициент аннуитета*/
koef = (i * (Math.pow(1 + i, period * 12))) / (Math.pow(1 + i, period * 12) - 1);

/*итог*/ 
result = sum * koef;

if (result <= 13000) {
document.querySelector('.mortgageBank').innerHTML = '<img src="../picture/bank1.svg">'; 
}
else if (result <= 14000) {
document.querySelector('.mortgageBank').innerHTML = '<img src="../picture/bank2.svg">'; 
}
else {
document.querySelector('.mortgageBank').innerHTML = '<img src="../picture/bank3.svg">'; 
}

/*округляем до целых*/
return result.toFixed();
};

module.getPeriod = function(sum, plat, rate) {
let mm,i,result;

/*ставка в месяц*/
i = (rate / 12) / 100;
mm = plat / sum;
result = getBaseLog(1 + i, -mm / (i - mm));
return Math.ceil(+result);
};
return module;})
();