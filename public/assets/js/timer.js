function Timer(tickCallback){
    this.time = 0;
    this.tickCallback = tickCallback;
}


Timer.prototype.start = function(){
    var self = this;
    var startTime = (new Date()).getTime();

    self.times = setInterval(function(){

        var date = new Date(),
            now = date.getTime(),
            differences = self.time + parseInt((now - startTime) / 1000);

        self.tickCallback(differences);

    }, 998);
};

Timer.prototype.set = function(time){
	var self = this;
	self.stop();
	self.time = time;
	self.start();
};


Timer.prototype.stop = function(){
    var self = this;
    clearTimeout(self.times);
    self.times = null;
};

Timer.prototype.restart = function(){
    var self = this;
    self.stop();
    self.start();
};