const channelId = 'ibai'; // Reemplaza con el nombre del canal de Twitch

const player = new Twitch.Player("player-container", {
    channel: channelId,
    width: 1200,
    height: 480,
});

player.setVolume(0.5);
