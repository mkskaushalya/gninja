
<style>

/* nav bar style */
*{
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    box-sizing: border-box;
}



.clearfix{overflow: auto;}

a{
    text-decoration: none;
}

ul{
    
    margin: 0;
    padding: 0;
    list-style: none;

}
#navsec {
    margin: 0;
    padding: 0;
    align-items: center;
}


.navbar{
    background-color: rgb(255, 195, 18, 0.3);
    border-radius: 0 0 20px 20px;
    padding: 4px 50px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    font-family: "Poppins", Arial, sans-serif;
    
}

@media (max-width: 1000px){
    .navbar{
    flex-direction: column;
    justify-content: center;
}
}
.navleft, .navul{
    display:flex;
    align-items: center;
    font-weight: bold;
}
.navleft h3{
    color:white;
    text-transform: uppercase;
}
.navleft h3 span{
    color: #FFC312;
}

.navli{
    display:inline-block;
    padding: 0 10px 0px 5px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    border-right: 2px solid #FFC312;
    height: 15px;
    

}

.navli:last-child {
    border-right:none;
}
.navlink{
    display: flex;
    align-items: center;
    height: 15px;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: all 0.3s ease;
    padding: 0;
    
}

.navlink:hover {
    color:#FFC312;
    font-size: 15px;
    font-weight: 600;
}





</style>
<section id="navsec">
        <nav class="navbar clearfix">
            <div class="navleft">
                <h3>G <span>Ninja</span></h3>
            </div>
            <ul class="navul">
                <!-- <li class="navli"><a href="#" class="navlink">Home</a></li>
                <li class="navli"><a href="#social" class="navlink">Social</a></li>
                <li class="navli"><a href="#activities" class="navlink">Activities</a></li>
                <li class="navli"><a href="#about" class="navlink">About</a></li> -->
                <li class="navli"><a href="php/logout.php" class="navlink">Logout</a></li>
            </ul>
            
        </nav>
</section>