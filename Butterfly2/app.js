document.addEventListener('DOMContentLoaded' , () => {
    const butterfly = document.querySelector('.butterfly')
    const gameDisplay = document.querySelector('.game-container')
    const ground = document.querySelector('.ground')

    let butterflyLeft = 220
    let butterflyBottom = 100
    let gravity = 2
    let isGameOver = false
    let gap = 430


    function startGame() {
        butterflyBottom -= gravity
        butterfly.style.bottom = butterflyBottom + 'px'
        butterfly.style.left = butterflyLeft + 'px'
    }
    let gameTimerId = setInterval(startGame, 20)

    function control(e) {
        if (e.keyCode === 32) {
            jump()
        }
    }

    function jump() {
        if (butterflyBottom < 500) butterflyBottom += 50
        butterfly.style.bottom = butterflyBottom + 'px'
        console.log(butterflyBottom)
    }
    document.addEventListener('keyup', control)


    function generateObstacle() {
        let obstacleLeft = 500
        let randomHeight = Math.random() * 60
        let obstacleBottom = randomHeight
        const obstacle = document.createElement('div')
        const topObstacle = document.createElement('div')
        if (!isGameOver) {
            obstacle.classList.add('obstacle')
            topObstacle.classList.add('topObstacle')
        }
        gameDisplay.appendChild(obstacle)
        gameDisplay.appendChild(topObstacle)
        obstacle.style.left = obstacleLeft + 'px'
        topObstacle.style.left = obstacleLeft + 'px'
        obstacle.style.bottom = obstacleBottom + 'px'
        topObstacle.style.bottom = obstacleBottom + gap + 'px'

        function moveObstacle () {
            obstacleLeft -=2
            obstacle.style.left = obstacleLeft + 'px'
            topObstacle.style.left = obstacleLeft + 'px'

            if (obstacleLeft === -60) {
                clearInterval(timerId)
                gameDisplay.removeChild(obstacle)
                gameDisplay.removeChild(topObstacle)
            }
            if (
                obstacleLeft > 200 && obstacleLeft < 280 && butterflyLeft === 220 && 
                (butterflyBottom < obstacleBottom + 153 || butterflyBottom > obstacleBottom + gap -200)||
                butterflyBottom === 0
                ) {
                gameOver()
                clearInterval(timerId)
            }
        }
        let timerId = setInterval(moveObstacle, 20)
        if (!isGameOver) setTimeout(generateObstacle, 3000)
    }
    generateObstacle()


    function gameOver() {
        clearInterval(gameTimerId)
        console.log('game over')
        isGameOver = true
        document.removeEventListener('keyup', control)
        
    }
})