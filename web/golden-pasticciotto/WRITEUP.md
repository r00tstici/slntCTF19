In this website the user can buy three different kind of pasticciotto at different prices. The initial credit is 10€ but the most expensive one costs 1000€.
There are two ways to solve this challenge

## Cookie tampering

By analyzing the page code it is visible that the credit is checked from cookies.
Bingo: by changing the "money" cookie value to 1000 it is possible to buy the golden pasticciotto and get the flag `slntCTF{g0ld3n_pa2t1cc10tt0_sh1t_s3cur1ty}`

## Missing server-side validation

Always looking at the code it is visible that when an user buys a pasticciotto, the website sends to the server the id of the pasticciotto and its price.
It is possible to edit the cost value in the form element and then press the purchase button.
Et voilà: `slntCTF{g0ld3n_pa2t1cc10tt0_sh1t_s3cur1ty}`