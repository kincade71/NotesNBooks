module.exports = exports = note = function() {
	this.date = "01/01/2001";
	this.message = "";
	/**
	 * The priority level of the message. "high", "low", "medium".
	 */
	this.priority = "low";
	this.isDeleted = false;
	this.isDisplayed = false;
	this.isSaved = true;
	this.screenPosition = null;
}