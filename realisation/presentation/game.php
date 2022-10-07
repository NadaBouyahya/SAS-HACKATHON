<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/game.css">
<div class="game">
    <div class="name">Fast typing</div>
    <div class="container">
      <div class="message">
        You Are Playing On
        <span class="lvl"></span> Level
        & You Have <span class="seconds"></span> Seconds To Type The Word
      </div>
      <div class="start">Start Playing</div>
      <div class="the-word"></div>
      <input type="text" class="input" />
      <!-- <div class="upcoming-words">Words Will Show Here</div> -->
      <!--  -->
      <div class="card mt-4 keycover">
        <div class="card-body col-12 row">
          <div class="keybord">
          <div class="d-flex flex-row">
            <button class="btn btn-outline-primary flex-fill">1</button>
            <button class="btn btn-outline-primary flex-fill">2</button>
            <button class="btn btn-outline-primary flex-fill">3</button>
            <button class="btn btn-outline-primary flex-fill">4</button>
            <button class="btn btn-outline-primary flex-fill">5</button>
            <button class="btn btn-outline-primary flex-fill">6</button>
            <button class="btn btn-outline-primary flex-fill">7</button>
            <button class="btn btn-outline-primary flex-fill">8</button>
            <button class="btn btn-outline-primary flex-fill">9</button>
            <button class="btn btn-outline-primary flex-fill">0</button>
          </div>
    
          
          <div class="d-flex flex-row">
            <button class="btn btn-outline-primary flex-fill">`</button>
            <button class="btn btn-outline-primary flex-fill">~</button>
            <button class="btn btn-outline-primary flex-fill">!</button>
            <button class="btn btn-outline-primary flex-fill">@</button>
            <button class="btn btn-outline-primary flex-fill">#</button>
            <button class="btn btn-outline-primary flex-fill">$</button>
            <button class="btn btn-outline-primary flex-fill">%</button>
            <button class="btn btn-outline-primary flex-fill">^</button>
            <button class="btn btn-outline-primary flex-fill">&</button>
            <button class="btn btn-outline-primary flex-fill">*</button>
            <button class="btn btn-outline-primary flex-fill">(</button>
            <button class="btn btn-outline-primary flex-fill">)</button>
            <button class="btn btn-outline-primary flex-fill">-</button>
            <button class="btn btn-outline-primary flex-fill">_</button>
            <button class="btn btn-outline-primary flex-fill">=</button>
            <button class="btn btn-outline-primary flex-fill">+</button>
          </div>
          
          
          <div class="d-flex flex-row">
            <button class="btn btn-outline-primary flex-fill">Q</button>
            <button class="btn btn-outline-primary flex-fill">W</button>
            <button class="btn btn-outline-primary flex-fill">E</button>
            <button class="btn btn-outline-primary flex-fill">R</button>
            <button class="btn btn-outline-primary flex-fill">T</button>
            <button class="btn btn-outline-primary flex-fill">Y</button>
            <button class="btn btn-outline-primary flex-fill">U</button>
            <button class="btn btn-outline-primary flex-fill">I</button>
            <button class="btn btn-outline-primary flex-fill">O</button>
            <button class="btn btn-outline-primary flex-fill">P</button>
            <button class="btn btn-outline-primary flex-fill">[</button>
            <button class="btn btn-outline-primary flex-fill">{</button>
            <button class="btn btn-outline-primary flex-fill">}</button>
            <button class="btn btn-outline-primary flex-fill">]</button>
            <button class="btn btn-outline-primary flex-fill">|</button>
            <button class="btn btn-outline-primary flex-fill">\</button>
          </div>
    
          
          <div class="d-flex flex-row">
            <button class="btn btn-outline-primary flex-fill">A</button>
            <button class="btn btn-outline-primary flex-fill">S</button>
            <button class="btn btn-outline-primary flex-fill">D</button>
            <button class="btn btn-outline-primary flex-fill">F</button>
            <button class="btn btn-outline-primary flex-fill">G</button>
            <button class="btn btn-outline-primary flex-fill">H</button>
            <button class="btn btn-outline-primary flex-fill">J</button>
            <button class="btn btn-outline-primary flex-fill">K</button>
            <button class="btn btn-outline-primary flex-fill">L</button>
            <button class="btn btn-outline-primary flex-fill">:</button>
            <button class="btn btn-outline-primary flex-fill">;</button>
            <button class="btn btn-outline-primary flex-fill">"</button>
            <button class="btn btn-outline-primary flex-fill">'</button>
            <button class="btn btn-outline-primary flex-fill">Enter</button>
          </div>
            
    
          <div class="d-flex flex-row">
            <button class="btn btn-outline-primary flex-fill">Z</button>
              <button class="btn btn-outline-primary flex-fill">X</button>
              <button class="btn btn-outline-primary flex-fill">C</button>
              <button class="btn btn-outline-primary flex-fill">V</button>
              <button class="btn btn-outline-primary flex-fill">B</button>
              <button class="btn btn-outline-primary flex-fill">N</button>
              <button class="btn btn-outline-primary flex-fill">M</button>
              <button class="btn btn-outline-primary col-3">space</button>
              <button class="btn btn-outline-primary flex-fill"></button>
              <button class="btn btn-outline-primary flex-fill">,</button>
              <button class="btn btn-outline-primary flex-fill">.</button>
              <button class="btn btn-outline-primary flex-fill">></button>
              <button class="btn btn-outline-primary flex-fill">?</button>
              <button class="btn btn-outline-primary flex-fill">/</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="control">
      <div class="time">Time Left: <span></span> Seconds</div>
      <div class="score">
        Score: <span class="got">0</span> From <span class="total"></span>
      </div>
      </div>
      <form>
        <input type="radio" id="Easy" name="fav_language" value="Easy" checked>
        <label for="Easy">Easy</label><br>
        <input type="radio" id="Normal" name="fav_language" value="Normal">
        <label for="Normal">Normal</label><br>
        <input type="radio" id="Hard" name="fav_language" value="Hard" class="">
        <label for="Hard">Hard</label>
      </form>
      <div class="finish"></div>
      <script src="javascript/app.js"></script>
    </div>
  </div>