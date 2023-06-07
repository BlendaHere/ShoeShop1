<style>

:root{
    --blue:#0E86D4;
    --dark-color:#055C9D;
    --black:#444;
    --light-color:#666;
    --border: .1rem solid rgba(0,0,0,.1);
    --border-hover: .1rem  solid var(--black);
    --box-shadow: .5rem 1rem rgba(0,0,0,.1);
}

    body {
    font-family: 'Roboto', sans-serif!important;
	margin:0;
	padding:0;
	box-sizing: border-box;
    background-image:url(img1.jpg);
}

.mainscreen
{
	min-height: 100vh;
	width: 100%;
	display: flex;
    flex-direction: column;
    /*background-color: #DFDBE5;
    color:#963E7B;*/
    /*background:url(img1.jpg);*/
    
}

.card {
  
	width: 60rem;
    margin: auto;
    background: white;
    position:center;
    align-self: center;
    top: 50rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display:flex;
    flex-direction: row;
    
}

.leftside {
	background: #030303;
	width: 25rem;
	display: inline-flex;
    align-items: center;
    justify-content: center;
	border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
	width: 20em;
    height: 20em;
    border-radius: 100%;
}

.rightside {
    /*background-color: #ffffff;*/
	width: 35rem;
	border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
    color:#0E86D4;
}

p{
    display:block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
    color:#0E86D4;
}

.inputbox
{
    color:#030303;
	width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #0E86D4;
    font-size: 1.1rem;
    font-weight: 500;
  outline:none;
}

.expcvv {
    display:flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}

.expcvv_text{
    padding-right: 1rem;
}
.expcvv_text2{
    padding:0 1rem;
}

.button{
    background: #0E86D4;
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width:100%;
    letter-spacing: .11rem;
    outline:none;
}

.button:hover
{
	transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}

@media only screen and (max-width: 1000px) {
    .card{
        flex-direction: column;
        width: auto;
      
    }

    .rightside{
        width:auto;
        border-bottom-left-radius: 1.5rem;
        padding:0.5rem 3rem 3rem 2rem;
      border-radius:0;
    }
}
.back-button {
  text-align: center;
  margin-top: 20px;
}

.back-button a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #0E86D4;
  color: white;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}

.back-button a:hover {
  background-color: #055C9D;
}
<

</style>

    <div class="mainscreen"> 
      <div class="card">
        <div class="rightside">
          <form action="" method ="post">
            <h1>Bëj Pagesën</h1>
            <h2>Informacioni i pagesës</h2>
            <p>Emri i Mbajtësittëkartës</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Numri i kartës</p>
            <input type="number" class="inputbox" name="card_number" id="card_number" required />

            <p>Lloji i kartës</p>
            <select class="inputbox" name="card_type" id="card_type" required>
              <option value="">--Selekto llojin e kartës--</option>
              <option value="Visa">Visa</option>
              <option value="RuPay">RuPay</option>
              <option value="MasterCard">MasterCard</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Skadimi</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
            <p></p>
            <button type="submit" class="button">Bëj Pagesën</button>
            <div class="back-button"><a href="index.php">Kthehu ne Kryefaqe </a></div>
          </form>
        </div>
      </div>
    </div>
    <script>
    window.onload = function() {
  var backButton = document.querySelector('.back-button a');
  backButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    history.back(); // Navigate back to the previous page
  });
};
</script>