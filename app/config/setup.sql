-- noinspection SqlNoDataSourceInspectionForFile
CREATE TABLE songs (
	Id int(11) primary key,
	song_path varchar(256),
	artist varchar(256),
	title varchar(256),
	votes int(4), --0 means not in heat yet
	category varchar(32)
);

CREATE TABLE heat (
	Id int(11) primary key,
	song_ids varchar(48) --(a json string of song id)
);

--there is no need for a queue just pull the last thing off the heat

/*
getWinningSong()
	setAllSongsInHeatAsPlayed()
	createNewHeat()
	clearLastHeat()

rescanMusicDir()
clearHasPlayed()

getVoteCount() //this might be done via a built in databind


property: songs in a heat
*/