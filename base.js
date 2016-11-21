'use strict';

let done = {
  num1 : 0,
  sampleFunc1: function(){
    this.num1 += 1;
  },
  call1:'sampleFunc1は',

  num2 : 0,
  sampleFunc2: function(){
    this.num2 += 1;
  },
  call2:'sampleFunc2は',

};


done.sampleFunc1();
done.sampleFunc1();
done.sampleFunc1();
done.sampleFunc1();

done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();
done.sampleFunc2();



for ( let i = 1; i <= 2; i++ ) {
  console.log(`sampleFunc${i}は` + done[`num${i}`] + '回呼ばれました');
}





// function sampleFunc(){
//   let n = 1;
//   return function done(){
//     console.log('私は' + n + '回呼ばれました');
//     n++;
//   };
// }



// let b = sampleFunc();
// b();
// b();



// sampleFunc();
// // => 私は1回呼ばれました

// sampleFunc();
// // => 私は2回呼ばれました

// sampleFunc();
// // => 私は3回呼ばれました

// sampleFunc();
// // => 私は4回呼ばれました