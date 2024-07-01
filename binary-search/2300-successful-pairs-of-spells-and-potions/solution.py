class Solution(object):
    def successfulPairs(self, spells, potions, success):
        """
        :type spells: List[int]
        :type potions: List[int]
        :type success: int
        :rtype: List[int]
        """
        potions.sort()

        n = len(spells)
        m = len(potions)
        pairs = []
        for i in range(n):
            # ceil(a / b) = (a + b - 1) // b
            # ceil(a / b) = -(-a // b)
            t = (success + spells[i] - 1) // spells[i]
            left, right = 0, m
            while left < right:
                j = (left + right) // 2
                if potions[j] >= t: right = j
                else: left = j + 1

            pairs.append(m - left)

        return pairs
